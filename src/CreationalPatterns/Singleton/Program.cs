using CreationalPattern.Singleton;

Console.Title = "Singleton pattern";

var logger = Logger.Instance;
var logger2 = Logger.Instance;

logger.WriteLog("This is a singleton pattern message, inserted by logger");

var message = logger2.GetLog();

Console.WriteLine(message);

Console.ReadLine();
