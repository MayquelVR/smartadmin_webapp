using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Options;

namespace SmartAdmin.WebUI.Controllers
{
    public class UtilitiesController : Controller
    {
        private readonly ApplicationSettings _settings;

        public UtilitiesController(IOptions<ApplicationSettings> settings)
        {
            _settings = settings.Value;
        }
        // GET
        public IActionResult Borders() => View(_settings);
        public IActionResult Clearfix() => View(_settings);
        public IActionResult ColorPallet() => View(_settings);
        public IActionResult DisplayProperty() => View(_settings);
        public IActionResult Fonts() => View(_settings);
        public IActionResult Flexbox() => View(_settings);
        public IActionResult Helpers() => View(_settings);
        public IActionResult Position() => View(_settings);
        public IActionResult ResponsiveGrid() => View(_settings);
        public IActionResult Sizing() => View(_settings);
        public IActionResult Spacing() => View(_settings);
        public IActionResult Typography() => View(_settings);
    }
}
