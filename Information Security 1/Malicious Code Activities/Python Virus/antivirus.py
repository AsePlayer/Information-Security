# Ryan Scott
# ITT-305

import csv
import glob
import os
import re


def checkForSign():
    print("### Scanning for Virus Signatures ###")

    programs = glob.glob("*.py")
    for p in programs:
        fileInfected = False
        file = open(p, "r")
        lines = file.readlines()
        file.close()

        for line in lines:
            # Search for virus signature, ignoring antivirus.
            if (re.search("^# you can't handle this!", line) and p != "antivirus.py"):
                print(f"VIRUS LOCATED AT {p}!")
                fileInfected = True
                cleanseFile(p)
        if (fileInfected is False):
            print(f"NO VIRUS IN {p}")

    print("### Virus Scan Complete ###")


def getFileData():
    # Get "before" phase of file
    programs = glob.glob("*.py")
    programList = []
    for p in programs:
        programSize = os.path.getsize(p)
        programModified = os.path.getmtime(p)
        programData = [p, programSize, programModified]

        programList.append(programData)
    return programList


def WriteFileData(programs):
    # Create & save first snapshot of fileData
    if os.path.exists("fileData.txt") and os.stat("fileData.txt").st_size != 0:
        return
    with open("fileData.txt", "w") as file:
        wr = csv.writer(file)
        wr.writerows(programs)


def checkForChanges():
    # Check for changes in fileData
    with open("fileData.txt") as file:
        fileList = file.read().splitlines()
    originalFileList = []
    for each in fileList:
        items = each.split(',')
        originalFileList.append(items)

    currentFileList = getFileData()

    for c in currentFileList:
        for o in originalFileList:
            if (c[0] == o[0]):
                if (str(c[1]) != str(o[1]) or str(c[2]) != str(o[2])):
                    print(f"\nDISCREPANCY IN {c[0]}!")
                    print("ORIGINAL = " + str(o))
                    print("CURRENT  = " + str(c))
                else:
                    print(f"\nEVERYTHING FINE IN {c[0]}")
    print("\n\n")


def cleanseFile(filePath):
    # Don't delete the virus, I need that!
    if(filePath == "virus.py"):
        return

    f = open(filePath, 'r')
    delete_list = ["# you can't handle this!", "import math", "math.factorial(9999)", "# Run if you dare!"]
    lst = []
    for line in f:
        for word in delete_list:
            if word in line:
                line = line.replace(word, '')
        lst.append(line)
    f.close()
    f = open(filePath, 'w')
    for line in lst:
        f.write(line)
    f.close()


WriteFileData(getFileData())
checkForChanges()
checkForSign()
