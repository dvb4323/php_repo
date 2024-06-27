-- Create a table named 'users'
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL
);

-- Insert some data into the table
INSERT INTO users (name, email) VALUES ('John Doe', 'johndoe@example.com');
INSERT INTO users (name, email) VALUES ('Jane Smith', 'janesmith@example.com');

-- Select all users from the table
SELECT * FROM users;

-- Update a user's email address
UPDATE users SET email = 'new_email@example.com' WHERE id = 1;

-- Delete a user from the table
DELETE FROM users WHERE id = 2;
