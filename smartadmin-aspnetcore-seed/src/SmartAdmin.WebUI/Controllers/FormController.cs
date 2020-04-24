using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Options;

namespace SmartAdmin.WebUI.Controllers
{
    public class FormController : Controller
    {
        private readonly ApplicationSettings _settings;

        public FormController(IOptions<ApplicationSettings> settings)
        {
            _settings = settings.Value;
        }
        // GET
        public IActionResult BasicInputs() => View(_settings);
        public IActionResult CheckboxRadio() => View(_settings);
        public IActionResult InputGroups() => View(_settings);
        public IActionResult Validation() => View(_settings);
    }
}
