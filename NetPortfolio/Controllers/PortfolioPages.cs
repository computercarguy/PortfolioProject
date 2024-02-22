using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Configuration;
using NetPortfolio.Models;
using NetPortfolio.Repos;
using System.Threading.Tasks;

namespace NetPortfolio.Controllers
{
    [Route("db")]
    public class PortfolioPages : Controller
    {
        private static IConfiguration configuration;

        public PortfolioPages(IConfiguration config)
        {
            configuration = config;
        }

        [HttpGet("{dbName}/{pageName}")]
        public async Task<IActionResult> GetPages([FromQuery] string dbname, [FromQuery] string pageName)
        {
            if (string.IsNullOrEmpty(dbname) || string.IsNullOrEmpty(pageName))
            {
                return StatusCode(StatusCodes.Status400BadRequest);
            }

            IDatabaseCalls dbController = null;

            switch (dbname.ToLower())
            {
                case "mysql":
                    dbController = new PhpMySql(configuration);
                    break;
                default:
                    break;

            }

            if (dbController is null)
            {
                return StatusCode(StatusCodes.Status400BadRequest);
            }

            Page contents = await dbController.QueryPage(pageName);

            return View("Pages/Dynamic", contents);
        }
    }
}
