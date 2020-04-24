using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Options;

namespace SmartAdmin.WebUI.Controllers
{
    public class IconsController : Controller
    {
        private readonly ApplicationSettings _settings;

        public IconsController(IOptions<ApplicationSettings> settings)
        {
            _settings = settings.Value;
        }
        // GET
        public IActionResult FontAwesomeLight() => View(_settings);
        public IActionResult FontAwesomeRegular() => View(_settings);
        public IActionResult FontAwesomeSolid() => View(_settings);
        public IActionResult FontAwesomeBrand() => View(_settings);
        public IActionResult NextGenGeneral() => View(_settings);
        public IActionResult NextGenBase() => View(_settings);
        public IActionResult StackShowcase() => View(_settings);
        public IActionResult StackGenerate() => View(_settings);
    }
}
