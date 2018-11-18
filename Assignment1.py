choice=input(" want to encrypt or decrypt your text : ")
while(choice=="yes"):
    type=input("Enter Your choice (Encrypt=1 Decrypt=2) : ")
    if(type=="1"):
      plaintext=input("Input text : ")
      alphabet="abcdefghijklmnopqrstuvwxyz"
      k=3
      cipher=''
      for a in plaintext:
         if a in alphabet:
           cipher +=alphabet[(alphabet.index(a)+k)%(len(alphabet))]
      print('Encrypted text is : ' + cipher)
    elif(type=="2"):
      plaintext=input("Input text : ")
      alphabet="zyxwvutsrqponmlkjihgfedcba"
      k=3
      cipher=''
      for a in plaintext:
         if a in alphabet:
           cipher +=alphabet[(alphabet.index(a)+k)%(len(alphabet))]
      print('Decrypted text is : ' + cipher)
      
