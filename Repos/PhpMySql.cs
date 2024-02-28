using Microsoft.Extensions.Configuration;
using NetPortfolio.Models;
using System;
using System.Collections.Generic;
using System.Threading.Tasks;

namespace NetPortfolio.Repos
{
    public class PhpMySql : IDatabaseCalls
    {
        private static Uri server;

        public PhpMySql(IConfiguration config)
        {
            server = new Uri(config.GetValue<string>("RemoteServer") + "portfolio/phpApi/mysql.php");
        }

        public async Task<Page> QueryPage(string pageName)
        {
            Dictionary<string, string> parameters = new()
            {
                { "page", pageName }
            };

            return await ApiCalls.HttpGet<Page>(server, parameters);
        }
    }
}
