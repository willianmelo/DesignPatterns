using System.Text;

namespace CreationalPattern.Singleton
{

    /// <summary>
    /// Singleton example
    /// </summary>
    public class Logger
    {
        private static readonly Lazy<Logger> _lazyLogger
                = new(() => new Logger());

        private StringBuilder logs;
        protected Logger()
        {
            logs = new StringBuilder();
        }

        public static Logger Instance
        {
            get { return _lazyLogger.Value; }
        }

        public void WriteLog(string message)
        {
            logs.AppendLine(message);
        }

        public string GetLog()
        {
            return logs.ToString();
        }
    }
}
