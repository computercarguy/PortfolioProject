using NetPortfolio.Models;

namespace NetPortfolio.Repos
{
    public interface IPortfolioPage
    {
        public Page GetPage(IDatabaseCalls databaseRepo, string pageName);
    }
}
