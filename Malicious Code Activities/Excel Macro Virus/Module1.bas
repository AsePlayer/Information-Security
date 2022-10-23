Attribute VB_Name = "Module1"

Sub Scary_Macro()
Attribute Scary_Macro.VB_ProcData.VB_Invoke_Func = "W\n14"

'----- Open Webpage
Dim Web As Object
Shell ("C:\Program Files (x86)\Google\Chrome\Application\Chrome.exe -url https://i.imgflip.com/3xh0gc.jpg")

'----- Rename File
Dim File As Range
Name "D:\GCU 2021\2022 Spring Semester\ITT-305\Very Important File DO NOT CHANGE.txt" As "D:\GCU 2021\2022 Spring Semester\ITT-305\Useless File IGNORE.txt"

'----- Open Program
Dim ChangedFile As Object
Open "D:\GCU 2021\2022 Spring Semester\ITT-305\Useless File IGNORE.txt" For Output As #1
    Write #1, "Your file has been fiddled with, bozo!"
Close #1

End Sub

