from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
import time


# Change to the path of chromedriver
service = Service(
    executable_path="C:/xampp/htdocs/StudentRecordSystem/python/chromedriver.exe")
driver = webdriver.Chrome(service=service)


def login_to_website(username, password):

    # URL of the login page
    login_url = 'https://prisms.ustp.edu.ph/auth/login'

    # Navigate to the login page
    driver.get(login_url)

    # Find the username and password input fields and submit button
    username_field = driver.find_element(By.ID, 'Username')
    password_field = driver.find_element(By.ID, 'password')
    submit_button = driver.find_element(
        By.CSS_SELECTOR, 'button[type="submit"]')

    # Enter the username and password
    username_field.send_keys(username)
    password_field.send_keys(password)

    # Click the submit button
    submit_button.click()

    return driver


def navigate_to_form(driver):
    # Check if login was successful before proceeding
    if "Home" in driver.page_source:
        # URL of the form page
        form_url = 'https://prisms.ustp.edu.ph/#student/grades'

        # Navigate to the form page
        driver.get(form_url)

        # Process the form page as needed
        time.sleep(20)
        process_form_page(driver.page_source)
    else:
        print("Cannot navigate to form URL without successful login.")


def process_form_page(html):
    # Process the form page as needed
    print("Form page processed.")


def main():
    username = input('Enter your StudentID: ')
    password = input('Enter your Password: ')

    # Login to the website
    website = login_to_website(username, password)

    # Navigate to the form page
    navigate_to_form(website)

    # Close the browser
    driver.quit()


if __name__ == "__main__":
    main()
