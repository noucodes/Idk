import requests
import re
from bs4 import BeautifulSoup

session = requests.session()


def login_to_website(name, password):
    # URL of the login page
    login_url = 'https://prisms.ustp.edu.ph/auth/login'

    # Get the login page and extract the CSRF token
    front = session.get(login_url)
    soup = BeautifulSoup(front.text, 'html.parser')
    csrf_token_input = soup.find('input', {'name': '_token'})
    csrf_token = csrf_token_input['value'] if csrf_token_input else None

    if csrf_token:

        # Submit login credentials with the obtained CSRF token
        payload = {
            'Username': name,
            'password': password,
            '_token': csrf_token,
        }

        r = session.post(login_url, data=payload)

        print(r)
    else:
        print("CSRF token not found in the HTML.")
    with open('index.html', 'w', encoding='utf-8') as f:
        f.write(r.text)

    return r


def navigate_to_form(response):
    # Check if login was successful before proceeding
    if response is None:
        print("Cannot navigate to form URL without successful login.")
        return

    # URL of the form page
    form_url = 'https://prisms.ustp.edu.ph/students/subjects'

    # Check if the request was successful
    if response.status_code == 200:
        # Process the form page if needed
        front = session.get(form_url)
        soup = BeautifulSoup(front.text, 'lxml')
        tr = soup.find("table")
        # for td in tr:
        #     schedule = {}
        #     schedule.unitCode = td.find_all("tr")
        print(tr)
        with open('schedule.html', 'w', encoding='utf-8') as u:
            u.write(soup.text)
    else:
        print("Failed to retrieve the form page.")


def main():
    name = input('Enter your StudentID: ')
    password = input('Enter yout Password: ')

    login_response = login_to_website(name, password)
    print(login_response)
    navigate_to_form(login_response)


if __name__ == "__main__":
    main()
