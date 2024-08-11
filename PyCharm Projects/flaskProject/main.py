from flask import Flask

# Initialize the Flask application
app = Flask(__name__)

# Define the route for the homepage
@app.route('/')
def home():
    return "Hello, World!"

# Run the application
if __name__ == '__main__':
    app.run(debug=True)
