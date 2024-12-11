# Laravel Test Assignment

## Objective
Build a simple task management API that allows users to create, read, update, and delete tasks. The API should also include user authentication and authorization. Additionally, implement an event listener to handle task creation notifications.

## Requirements

1. **Setup:**
   - Create a fork of this repo.
   - Create a new Laravel project in your fork.
   - Use Laravel Sanctum for API authentication.

3. **Database:**
   - Create a migration for a `users` table (if not already provided by Laravel).
   - Create a migration for a `tasks` table with the following fields:
     - `id`: Primary key
     - `user_id`: Foreign key referencing the `users` table
     - `title`: String
     - `description`: Text
     - `status`: Enum (values: 'pending', 'in_progress', 'completed')
     - `created_at`: Timestamp
     - `updated_at`: Timestamp

4. **Models:**
   - Create a `Task` model and define the relationship with the `User ` model (one-to-many).

5. **Controllers:**
   - Create a `TaskController` with the following methods:
     - `index()`: List all tasks for the authenticated user.
     - `store(Request $request)`: Create a new task. Validate the request data and dispatch an event for task creation.
     - `show($id)`: Show a specific task for the authenticated user.
     - `update(Request $request, $id)`: Update a specific task. Validate the request data.
     - `destroy($id)`: Delete a specific task.

6. **Events and Listeners:**
   - Create an event called `TaskCreated` that is dispatched when a new task is created.
   - Create a listener called `SendTaskCreatedNotification` that listens for the `TaskCreated` event and handles the notification (e.g., log a message or send an email).

7. **Queues:**
   - Configure the listener to be queued, so the notification is processed asynchronously. Ensure that the queue driver is set up (e.g., using the `sync` driver for simplicity).

8. **Routes:**
   - Define API routes for the task management functionality in `routes/api.php`:
     - `GET /tasks`: List all tasks
     - `POST /tasks`: Create a new task
     - `GET /tasks/{id}`: Show a specific task
     - `PUT /tasks/{id}`: Update a specific task
     - `DELETE /tasks/{id}`: Delete a specific task

9. **Middleware:**
   - Implement middleware to ensure that users can only access their own tasks. Apply this middleware to the task routes.

10. **Testing:**
   - Write feature tests for the following scenarios:
     - User can create a task.
     - User can retrieve their tasks.
     - User can update their task.
     - User can delete their task.
     - User cannot access tasks that do not belong to them.
     - Verify that the `TaskCreated` event is dispatched when a task is created.

11. **Documentation:**
    - Provide a brief README file explaining how to set up the project, run migrations, and test the API endpoints using Postman or any other API client.

## Evaluation Criteria

- **Code Quality:** Clean, readable, and maintainable code.
- **Use of Laravel Features:** Proper use of Eloquent, middleware, events, listeners, and queues.
- **Testing:** Comprehensive tests that cover the main functionalities and event dispatching.
- **Documentation:** Clarity and completeness of the README file.
- **Time Management:** Ability to complete the assignment within the given timeframe.

## Submission

Please submit your code via a GitHub repository link along with the README file.

## Notes

- You may use any additional packages or libraries that you find necessary.
- Focus on implementing the core features; additional features (like pagination, sorting, etc.) are optional and can be added if time permits.

# 1. Make sure to commit each step from requirements seperatly with proper commit message what is done in this commit. The more the commits, the more we love it
# 2. Any code generated by AI tools will result in immediate failure
