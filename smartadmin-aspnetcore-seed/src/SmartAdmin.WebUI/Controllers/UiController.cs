using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Options;

namespace SmartAdmin.WebUI.Controllers
{
    public class UiController : Controller
    {
        private readonly ApplicationSettings _settings;

        public UiController(IOptions<ApplicationSettings> settings)
        {
            _settings = settings.Value;
        }
        // GET
        public IActionResult Alerts() => View(_settings);
        public IActionResult Accordion() => View(_settings);
        public IActionResult Badges() => View(_settings);
        public IActionResult Breadcrumbs() => View(_settings);
        public IActionResult Buttons() => View(_settings);
        public IActionResult ButtonGroup() => View(_settings);
        public IActionResult Cards() => View(_settings);
        public IActionResult Carousel() => View(_settings);
        public IActionResult Collapse() => View(_settings);
        public IActionResult Dropdowns() => View(_settings);
        public IActionResult ListFilter() => View(_settings);
        public IActionResult Modal() => View(_settings);
        public IActionResult Navbars() => View(_settings);
        public IActionResult Panels() => View(_settings);
        public IActionResult Pagination() => View(_settings);
        public IActionResult Popovers() => View(_settings);
        public IActionResult ProgressBars() => View(_settings);
        public IActionResult SidePanel() => View(_settings);
        public IActionResult ScrollSpy() => View(_settings);
        public IActionResult Spinners() => View(_settings);
        public IActionResult TabsPills() => View(_settings);
        public IActionResult Toasts() => View(_settings);
        public IActionResult Tooltips() => View(_settings);
    }
}
