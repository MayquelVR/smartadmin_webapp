using System.Threading.Tasks;
using Microsoft.AspNetCore.Identity.UI.Services;

namespace SmartAdmin.WebUI.Models
{
    public class EmailSender : IEmailSender
    {
        public Task SendEmailAsync(string email, string subject, string message) => Task.CompletedTask;
    }
}
