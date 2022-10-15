using NetPortfolio.Models;
using System.Threading.Tasks;

namespace NetPortfolio.Repos
{
    public interface IPortfolioPage
    {
        public Task<Page> GetPage(IDatabaseCalls databaseRepo, string pageName);
    }
}
