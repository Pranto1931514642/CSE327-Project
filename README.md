# CSE327-Project
In my project there was three functions for me in this project.And here is my project documentation-


Function 1 HOME-
Here in the home page the users find 3 parts. No 1 is Register as a donor, No 2 is Search for blood, No 3 is Request for blood. In this home page part here If someone wants to donate blood then their blood will go to PHP for registration.  Then there is the option of adding a donor, there is the option of deleting, and there is the option of list of all donors. Thats all on the home page.

Function 2 REGISTRATION-
In the registration section, if the user has already opened an account, then he will go to the admin page, otherwise he will go to the registration page.  I have located two files.  One navadmin and another navuser. Then here is only CSS style code. Then I took the information in the donor's registration form. Here everything from name to blood group and address is taken. Then I stored all the information in a function of map in variable post method by use, it means to store the user's information. Then I input them into the database and at the end I added the location separately. If everything is fine, then it will shows registration successful otherwise it will say registration failed.  

Function 3 BLOOD-
And the blood function will first check whether the user is logged in or not. If he is logged in, he will go to the admin page and if not, the user will be brought to the page. Then a list of donors will appear. Here is some CSS code for the style of that page.  It is written here. Then an option to search for blood group is given here. He can search for the blood group that he needs. And that blood group is searched according to the location from the database. If there is a match, then those who will be near the location of the blood.  A list of them will show.  The donor's information, phone number, gender, age, last donated, address will be there. It will show all the things that the donor gave during the registration.  Then at the last side, the few codes that are there are the query code of MySQL, there is the code of matching the data from the database. That information is sent in the form of a table which can be seen in that list.

