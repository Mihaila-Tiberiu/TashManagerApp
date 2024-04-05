<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Task manager app</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" />
        <script src="{{ asset('js/updateTask.js') }}" defer></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <h1>Task manager app</h1>
        <hr />
        <div>
            <h2>Create Task</h2>
            <form action="{{ route('saveTask') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" class="input-field" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" class="input-field" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="due_date">Due Date:</label>
                    <input type="date" id="due_date" name="due_date" class="input-field" required>
                </div>
                <div class="form-group">
                    <label for="due_date">Status:</label>
                    <input type="text" id="status" name="status" class="input-field" required>
                </div>
                <button type="submit" class="button primary-button">Create Task</button>
            </form>
        </div>

        <div>
            <h2>Your tasks</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasksList as $task)
                        <tr data-task-id="{{ $task->id }}">
                            <td class="editable" contenteditable="true">{{ $task->title }}</td>
                            <td class="editable" contenteditable="true">{{ $task->description }}</td>
                            <td class="editable" contenteditable="true">{{ $task->due_date}}</td>
                            <td class="editable" contenteditable="true">{{ $task->status }}</td>
                            <td>
                                <button class="submit-btn" style="display: none;">Submit</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
