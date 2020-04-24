using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Options;

namespace SmartAdmin.WebUI.Controllers
{
    public class PluginController : Controller
    {
        private readonly ApplicationSettings _settings;

        public PluginController(IOptions<ApplicationSettings> settings)
        {
            _settings = settings.Value;
        }
        // GET
        public IActionResult Faq() => View(_settings);
        public IActionResult Waves() => View(_settings);
        public IActionResult PaceJs() => View(_settings);
        public IActionResult SmartPanels() => View(_settings);
        public IActionResult BootBox() => View(_settings);
        public IActionResult Slimscroll() => View(_settings);
        public IActionResult Throttle() => View(_settings);
        public IActionResult Navigation() => View(_settings);
        public IActionResult I18Next() => View(_settings);
        public IActionResult AppCore() => View(_settings);
    }
}
