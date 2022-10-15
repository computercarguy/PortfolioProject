namespace NetPortfolio.Models
{
    public class Content
    {
        public int Id { get; set; }
        public int PagesId { get; set; }
        public decimal Sequence { get; set; }
        public string Value { get; set; }
        public string CssClasses { get; set; }
        public int ColSpan { get; set; }
        public int RowSpan { get; set; }
        public string Style { get; set; }

    }
}
