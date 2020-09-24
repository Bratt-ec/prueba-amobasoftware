<template>
   <form method="post" action="{{ route('contacts.store') }}" class="formulario">
              @csrf
              <div class="form-group">    
                  <input type="text" class="form-control form-control-lg form-rounded " name="first_name" placeholder="Full Name"/>
              </div>

              <div class="form-group">
                  <input type="text" class="form-control form-control-lg form-rounded" name="email" placeholder="Email"/>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control form-control-lg form-rounded" name="telephone" placeholder="Telephone"/>
              </div>
              <div class="form-group">
                  <textarea type="text" class="form-control form-control-lg form-rounded" name="message" placeholder="Your Message"></textarea>
              </div>                       
              <button type="submit" class="btn btn-info btn-lg"><span class="fa fa-paper-plane">Send</span></button>
          </form>

</template>

<script>
export default {
  data() {
    return {
      fields: {},
      errors: {},
      success: false,
      loaded: true,
    }
  },
  methods: {
    submit() {
      if (this.loaded) {
        this.loaded = false;
        this.success = false;
        this.errors = {};
        axios.post('/contacts/store', this.fields).then(response => {
          this.fields = {}; //Clear input fields.
          this.loaded = true;
          this.success = true;
        }).catch(error => {
          this.loaded = true;
          if (error.response.status === 422) {
            this.errors = error.response.data.errors || {};
          }
        });
      }
    },
  },
}
</script>