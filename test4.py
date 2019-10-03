import boto3
string = ""
ec2 = boto3.resource('ec2')
for instance in ec2.instances.all():
    string += str(instance.id)  
    string += "          " + instance.state['Name']
    string += '<br>'
   

print(string)
