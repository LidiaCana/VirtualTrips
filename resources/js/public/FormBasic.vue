<template>
  <div class="container">
    <h2 class="text-center">Contáctanos</h2>
    <form id="logout-form" action method="POST" style>
      <div class="form-group">
        <label for="exampleInputEmail1">Correo</label>
        <input
          type="email"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
        >
        <small id="emailHelp" class="form-text text-muted">No se compartira su correo electronico.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Mensaje</label>
        <input type="text" class="form-control" id>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</template>

<script>
export default {
  name: "FormBasic",
  data() {
    return {};
  },
  methods: {}
};
</script>