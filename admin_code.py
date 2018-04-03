#!C:\Python27\python.exe
print "Content-Type:text/html\n\n"
import cgi
import MySQLdb
data=cgi.FieldStorage()
#print n
n=data.getvalue('name')
e=data.getvalue('email')
p=data.getvalue('password')
con=MySQLdb.connect("127.0.0.1","root","","loan_management",3306)
query="insert into login(name,email,password) values ('"+n+"','"+e+"','"+p+"')"
#print(query)
cur=con.cursor()
cur.execute(query)
con.commit()
con.close()
print "Thanks"