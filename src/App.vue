<template>
  <div>
    <h1>To-Do List</h1>
    <ul>
      <li v-for="todo in todos" :key="todo.id">{{ todo.task }}</li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      todos: [],
    };
  },
  mounted() {
    // Fetch data from the PHP backend when the component is mounted
    this.fetchTodos();
  },
  methods: {
    async fetchTodos() {
      try {
        const response = await fetch(
          "http://localhost/php-backend/api/todos.php"
        );
        const data = await response.json();
        this.todos = data;
      } catch (error) {
        console.error("Error fetching todos:", error);
      }
    },
  },
};
</script>
