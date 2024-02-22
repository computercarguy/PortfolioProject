using System;
using System.Collections.Generic;
using System.Net.Http;
using System.Net.Http.Headers;
using System.Text.Json;
using System.Threading.Tasks;

namespace NetPortfolio.Repos
{
    /// <summary>
    /// A generic class to easily do REST calls to remote APIs.
    /// I've significantly reduced class sizes by using a class like this so other classes don't have to do
    /// all the HttpClient setup, query, reading results, and managing exceptions for every call.
    /// These methods can easily be modified for different needs, such as a simple string result or more parameters.
    /// This simple project doesn't need all of these methods, but I included them for completeness. I don't normally
    /// add code I won't need, because of the YAGNI principle.
    /// </summary>
    public static class ApiCalls
    {
        public static async Task<T> HttpGet<T>(Uri location, Dictionary<string, string> parameters)
        {
            try
            {
                using HttpClient client = new();
                client.BaseAddress = location;
                client.DefaultRequestHeaders.Accept.Clear();
                client.DefaultRequestHeaders.Accept.Add(new MediaTypeWithQualityHeaderValue("application/json"));

                HttpResponseMessage response = await client.GetAsync(ToQueryParams(parameters));

                if (response.IsSuccessStatusCode)
                {
                    string jsonString = await response.Content.ReadAsStringAsync();

                    if (string.IsNullOrEmpty(jsonString))
                    {
                        return default;
                    }

                    return JsonSerializer.Deserialize<T>(jsonString);
                }

                return default;
            }
            catch
            {
                // Add logging or other actions, and possibly rethrow the exception
                return default;
            }
        }

        public static async Task<T> HttpPost<T>(Uri location, Dictionary<string, string> parameters, object body)
        {
            try
            {
                using HttpClient client = new();
                client.BaseAddress = location;
                client.DefaultRequestHeaders.Accept.Clear();
                client.DefaultRequestHeaders.Accept.Add(new MediaTypeWithQualityHeaderValue("application/json"));
                StringContent stringContent = new(JsonSerializer.Serialize(body));

                HttpResponseMessage response = await client.PostAsync(ToQueryParams(parameters), stringContent);

                if (response.IsSuccessStatusCode)
                {
                    string jsonString = await response.Content.ReadAsStringAsync();

                    if (string.IsNullOrEmpty(jsonString))
                    {
                        return default;
                    }

                    return JsonSerializer.Deserialize<T>(jsonString);
                }

                return default;
            }
            catch
            {
                // Add logging or other actions, and possibly rethrow the exception
                return default;
            }
        }

        public static async Task<T> HttPut<T>(Uri location, Dictionary<string, string> parameters, object body)
        {
            try
            {
                using HttpClient client = new();
                client.BaseAddress = location;
                client.DefaultRequestHeaders.Accept.Clear();
                client.DefaultRequestHeaders.Accept.Add(new MediaTypeWithQualityHeaderValue("application/json"));
                StringContent stringContent = new(JsonSerializer.Serialize(body));

                HttpResponseMessage response = await client.PutAsync(ToQueryParams(parameters), stringContent);

                if (response.IsSuccessStatusCode)
                {
                    string jsonString = await response.Content.ReadAsStringAsync();

                    if (string.IsNullOrEmpty(jsonString))
                    {
                        return default;
                    }

                    return JsonSerializer.Deserialize<T>(jsonString);
                }

                return default;
            }
            catch
            {
                // Add logging or other actions, and possibly rethrow the exception
                return default;
            }
        }

        public static async Task<T> HttpDelete<T>(Uri location, Dictionary<string, string> parameters)
        {
            try
            {
                using HttpClient client = new();
                client.BaseAddress = location;
                client.DefaultRequestHeaders.Accept.Clear();
                client.DefaultRequestHeaders.Accept.Add(new MediaTypeWithQualityHeaderValue("application/json"));

                HttpResponseMessage response = await client.DeleteAsync(ToQueryParams(parameters));

                if (response.IsSuccessStatusCode)
                {
                    string jsonString = await response.Content.ReadAsStringAsync();

                    if (string.IsNullOrEmpty(jsonString))
                    {
                        return default;
                    }

                    return JsonSerializer.Deserialize<T>(jsonString);
                }

                return default;
            }
            catch
            {
                // Add logging or other actions, and possibly rethrow the exception
                return default;
            }
        }

        private static string ToQueryParams(Dictionary<string, string> parameters)
        {
            if (parameters is null || parameters.Count == 0)
            {
                return string.Empty;
            }

            List<string> returnResults = new();

            foreach (KeyValuePair<string, string> entry in parameters)
            {
                returnResults.Add($"{entry.Key}={entry.Value}");
            }

            return "?" + string.Join("&", returnResults);
        }
    }
}
