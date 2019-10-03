# selectionsite

### Description

this repository contains a script that creates a website and the mysql data to go with it plus merges/recieves data contained in [this repo](https://github.com/stanleychilton/ITproject) the best way to run this website is on a test server which i found xampp was the best way to run this.

**(installation guide below)**


---


### Required software

1. **Xampp**
2. **AWScli** (install guide below) 
3. **boto3** for python (install guide below)
4. **paramiko** for python (install guide below)

---

### Setup

1. Install boto3, and paramiko using the commands below in your command line.
   - `pip install boto3`
2. Install [xampp](https://www.apachefriends.org/index.html)
3. navigate to the htdocs folder in the xampp file structure and paste all the website data.
4. click mysql admin on the xampp control panel. create a database table called itproject. 
5. import the mysql database from the file in the given folder.
6. create a new user account on the database, (hostname = localhost) then add all this information to the connect.php file.
7. if portforwarding this you can run the python script from [this repo](https://github.com/stanleychilton/ITproject) on any computer just make sure to change the address how ever if not portforwarding for the test you will need to change the url in the python scripts in [this repo](https://github.com/stanleychilton/ITproject) to localhost and run them on the same machine
testing over a network can be tested using [this site](www.clicker-box.com/selectionsite/)
8.
