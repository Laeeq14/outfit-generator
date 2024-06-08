import mysql.connector
from random import choice

# Database connection details (replace with your credentials)
db_host = "localhost"
db_user = "root"
db_password = ''
db_name = "outfit_gen"

def connect_to_database():
  """Connects to the XAMPP MySQL database and returns the connection object."""
  try:
    connection = mysql.connector.connect(
        host=db_host,
        user=db_user,
        password=db_password,
        database=db_name
    )
    return connection

  except mysql.connector.Error as err:
    print(f"Error connecting to database: {err}")
    return None

def get_clothing_by_color(connection, color):
  """Retrieves clothing items with a specific color from the database."""
  query = f"SELECT * FROM clothing WHERE color = '{color}'"
  cursor = connection.cursor()
  cursor.execute(query)
  return cursor.fetchall()

def get_clothing_by_occasion(connection, occasion):
  """Retrieves clothing items suitable for a specific occasion from the database."""
  # Adjust the query based on how you store occasion data in your database (e.g., comma-separated list)
  query = f"SELECT * FROM clothing WHERE occasion LIKE '%{occasion}%'"
  cursor = connection.cursor()
  cursor.execute(query)
  return cursor.fetchall()

def generate_outfit(connection, color, occasion):
  """Generates a random outfit suggestion based on color and occasion."""
  # Get clothing options by color
  color_options = get_clothing_by_color(connection, color)

  # Get clothing options by occasion
  occasion_options = get_clothing_by_occasion(connection, occasion)

  # Filter options to consider only items suitable for both color and occasion (optional)
  filtered_options = [item for item in color_options if item in occasion_options]  # Implement list intersection logic

  # Randomly select one item from each category (tops, bottoms, shoes, etc.)
  outfit = []
  for category in set([item[0] for item in filtered_options]):  # Get unique categories
    category_items = [item for item in filtered_options if item[0] == category]
    chosen_item = choice(category_items)
    outfit.append(chosen_item)

  return outfit

def main():
  # Connect to the database
  connection = connect_to_database()
  if connection:
    # Get user input for color and occasion (replace with actual user input logic)
    color = "blue"
    occasion = "formal"

    # Generate outfit suggestion
    outfit = generate_outfit(connection, color, occasion)

    # Print the suggested outfit (replace with actual display logic)
    for item in outfit:
      print(f"{item[0]}: {item[1]} (Occasion: {', '.join(item[2:])})")  # Assuming occasion is stored in a list-like format

  connection.close()

if __name__ == "main":
  main()