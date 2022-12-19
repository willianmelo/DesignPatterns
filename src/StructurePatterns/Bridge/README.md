* Bridge
  - use this pattern when the number of class are increasing in N * N.

* In this example, the task had export files to ZIP or XML, but the number of file types and the extensions to export could increase.
* So, I created an abstraction to help me, spliting the code in two, one of them are responsible to export and the other to format the file.
* With this the bridge could be created between my interfaces.