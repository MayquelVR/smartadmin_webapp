using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Options;

namespace SmartAdmin.WebUI.Controllers
{
    public class PageController : Controller
    {
        private readonly ApplicationSettings _settings;

        public PageController(IOptions<ApplicationSettings> settings)
        {
            _settings = settings.Value;
        }
        // GET
        public IActionResult Chat() => View(_settings);
        public IActionResult Contacts() => View(_settings);
        public IActionResult ForumList() => View(_settings);
        public IActionResult ForumThreads() => View(_settings);
        public IActionResult ForumDiscussion() => View(_settings);
        public IActionResult InboxGeneral() => View(_settings);
        public IActionResult InboxRead() => View(_settings);
        public IActionResult InboxWrite() => View(_settings);
        public IActionResult Invoice() => View(_settings);
        public IActionResult Forget() => Redirect("/identity/account/forgotpassword");
        public IActionResult Locked() => Redirect("/identity/account/lockout");
        public IActionResult Login() => Redirect("/identity/account/login");
        public IActionResult Register() => Redirect("/identity/account/register");
        public IActionResult Error() => View();
        public IActionResult Error404() => View();
        public IActionResult ErrorAnnounced() => View();
        public IActionResult Profile() => View(_settings);
        public IActionResult Search() => View(_settings);
    }
}
