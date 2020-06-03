<template>
  <div>
    <form @submit.prevent="editarTrip(trip)" v-if="modoEditar">
      <h3>Editar nota</h3>
      <input
        type="text"
        class="form-control mb-2"
        placeholder="Nombre de la nota"
        v-model="trip.name"
      >
      <input
        type="text"
        class="form-control mb-2"
        placeholder="Descripción del viaje"
        v-model="nota.descripcion"
      >
      <button class="btn btn-warning" type="submit">Editar</button>
      <button class="btn btn-danger" type="submit" @click="cancelarEdicion">Cancelar</button>
    </form>
    <form @submit.prevent="agregar" v-else>
      <h3>Agregar viaje</h3>
      <input
        type="text"
        class="form-control mb-2"
        placeholder="Nombre del viaje"
        v-model="trip.name"
      >
      <input
        type="text"
        class="form-control mb-2"
        placeholder="Descripción de la nota"
        v-model="trip.description"
      >
      <button class="btn btn-primary" type="submit">Agregar</button>
    </form>
    <hr>
    <h3>Lista de viajes:</h3>
    <ul class="list-group">
      <li class="list-group-item" v-for="(item, index) in trips" :key="index">
        <span class="badge badge-primary float-right">{{item.updated_at}}</span>
        <p>{{item.name}}</p>
        <p>{{item.description}}</p>
        <p>
          <button class="btn btn-warning btn-sm" @click="editarFormulario(item)">Editar</button>
          <button class="btn btn-danger btn-sm" @click="eliminarTrip(item, index)">Eliminar</button>
        </p>
      </li>
    </ul>
  </div>
</template>
<script>
export default {
    data() {
    return {
      trips: [],
      modoEditar: false,
      title:'Lista de viajes',
      trip = {name:'', description:''}
    }
  },
  created(){
    axios.get('/trips').then(res=>{
      this.trips = res.data;
    })
  },
  methods:{
      agregar(){
      if(this.trip.name.trim() === '' || this.trip.description.trim() === ''){
        alert('Debes completar todos los campos antes de guardar');
        return;
      }
      const newTrip = this.trip;
      this.trip = {name: '', description: ''};    
      axios.post('/trips', newTrip)
        .then((res) =>{
          const tripServer = res.data;
          this.trips.push(tripServer);
        })
    },
    editarFormulario(item){
      this.trip.name = item.name;
      this.trip.description = item.description;
      this.trip.id = item.id;
      this.modoEditar = true;
    },
    editarTrip(trip){
      const params = {name: trip.name, description: trip.description};
      axios.put(`/trips/${trip.id}`, params)
        .then(res=>{
          this.modoEditar = false;
          const index = this.trips.findIndex(item => item.id === trip.id);
          this.trips[index] = res.data;
        })
    },
    eliminarTrip(trip, index){
      const confirmation = confirm(`Eliminar nota ${trip.name}`);
      if(confirmation){
        axios.delete(`/trips/${trip.id}`)
          .then(()=>{
            this.trips.splice(index, 1);
          })
      }
    },
    cancelarEdicion(){
      this.modoEditar = false;
      this.trip = {name: '', description: ''};
    }
  }
}
</script>

