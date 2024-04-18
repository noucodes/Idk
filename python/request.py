import requests
import re
from bs4 import BeautifulSoup

# URL of the login page
login_url = 'https://prisms.ustp.edu.ph/auth/login'

URL = 'laravelapp.url'

session = requests.session()

front = session.get(login_url)
csrf_token = re.findall(
    r'<input type="hidden" name="_token" value="(.*)"', front.text)[0]

print(csrf_token)
print(session.cookies['XSRF-TOKEN'])

payload = {
    'Username': '2023308388',
    'password': 'skyler123',
    '_token': csrf_token,
}

r = requests.post(login_url, data=payload)

print(r)

# # Send a GET request to the login page to extract the CSRF token
# response = requests.get(login_url)
# soup = BeautifulSoup(response.text, 'html.parser')
# csrf_token = soup.find('input', {'name': '_token'})['value']

# # Data to be submitted in the login form
# login_data = {
#     'Username': '2023308388',  # Replace with your username
#     'password': 'skyler123',   # Replace with your password
#     '_token': csrf_token
# }

# # Send a POST request to submit the login form
# login_response = requests.post(login_url, data=login_data)

# print(csrf_token)
# with open('index.html', 'w', encoding='utf-8') as f:
#     f.write(login_response.text)
# if login_response.status_code == 200:
#     if 'Welcome' in login_response.text:
#         print("Login successful.")
#     else:

#         print("Failed to validate login.")
# else:
#     print("Failed to connect to the server.")
