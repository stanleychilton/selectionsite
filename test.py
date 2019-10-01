import sys

input1 = sys.argv[1]
input2 = sys.argv[2]

test = []

test.append(input1)
test.append(input2)

string  = ""
for i in test:
	string += i
	string += "<br>"
	
print(string)
