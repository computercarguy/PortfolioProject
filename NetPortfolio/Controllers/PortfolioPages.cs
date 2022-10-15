using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using System.Threading.Tasks;

namespace NetPortfolio.Controllers
{
    [Route("db")]
    public class PortfolioPages : Controller
    {
        public PortfolioPages()
        {

        }

        [HttpGet("{dbName}/{pageName}")]
        public async Task<IActionResult> GetPages([FromQuery] string dbname, [FromQuery] string pageName)
        {
            if (string.IsNullOrEmpty(dbname) || string.IsNullOrEmpty(pageName))
            {
                return StatusCode(StatusCodes.Status500InternalServerError);
            }

            return Ok();
        }
    }
}
