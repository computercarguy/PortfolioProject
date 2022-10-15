using System.Collections.Generic;

namespace NetPortfolio.Models
{
    public class Page
    {
        public int Id { get; set; }
        public string Name { get; set; }
        public string Description { get; set; }

        public readonly List<Content> Contents = new List<Content>();
    }
}
