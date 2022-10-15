using NetPortfolio.Models;
using System.Threading.Tasks;

namespace NetPortfolio.Repos
{
    public interface IDatabaseCalls
    {
        public Task<Page> QueryPage(string pageName);
    }
}
