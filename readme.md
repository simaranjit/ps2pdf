#ps2pdf converter
##Operating system support
Windows only since ghostscript service is used internally.

##What is ps2pdf
ps2pdf is a CLI based tool which is used for bulk convert from PS files to PDF files

##How to use is
This tool is very simple and easy to use, after downloading it, put all your `.ps` files in `files` directory and run create.bat file, by clicking on it.

You will see a box like this:
```
C:\Users\Simaranjit\Desktop\ps2pdf>utils\php.exe utils\logic\logic.php
Fixing file: files/add_files_in_this_directory.info (1%)
Fixing file: files/sample - Copy (10).ps (1%)
Fixing file: files/sample - Copy (100).ps (2%)
Fixing file: files/sample - Copy (101).ps (3%)
Fixing file: files/sample - Copy (102).ps (3%)
Fixing file: files/sample - Copy (103).ps (4%)
Fixing file: files/sample - Copy (104).ps (5%)
Fixing file: files/sample - Copy (105).ps (5%)
Fixing file: files/sample - Copy (106).ps (6%)
Fixing file: files/sample - Copy (107).ps (7%)
Fixing file: files/sample - Copy (108).ps (7%)
Fixing file: files/sample - Copy (109).ps (8%)
Fixing file: files/sample - Copy (11).ps (9%)
Fixing file: files/sample - Copy (110).ps (9%)
````

When 100% progress is done, go to files directory and you will see that all of your `.ps` files have been converted to `.psd`

*Note:* Your old files will get removed, Make sure that you have backup of those.

##Licensing
Please read Licensing of Ghost services before using this serices and use this software accordingly.
http://www.ghostscript.com/download/gsdnld.html
