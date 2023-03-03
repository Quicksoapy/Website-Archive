import cgitb

x = int(input("enter a number: "))
y = int(input("enter another number: "))
a = str(input("*, /, + or - ?: "))
if a == "+":
    print(x + y)
if a == "-":
    print(x - y)
if a == "/":
    print (x / y)
if a == "*":
    print (x * y)
