import sys

input1 = sys.argv[1]
input2 = sys.argv[2]

test = []

test.append(input1)
test.append(input2)

if test[0] == Null or test[1] == Null:
	## script here to grab all data from the cost software
else:
	## code here to grab specific date data 
	## test[0] is start date
	## test[1] is end date
	
string  = ""
for i in test:
	string += i
	string += "<br>" ## formatting needs to be done here
	
print(string)  ## passes the string data back to the php script
