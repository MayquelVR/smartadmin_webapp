using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Options;

namespace SmartAdmin.WebUI.Controllers
{
    public class InfoController : Controller
    {
        private readonly ApplicationSettings _settings;

        public InfoController(IOptions<ApplicationSettings> settings)
        {
            _settings = settings.Value;
        }

        public IActionResult AppLicensing() => View(_settings);
        public IActionResult AppFlavors() => View(_settings);
    }
}
