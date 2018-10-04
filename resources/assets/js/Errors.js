export default class Errors {
    constructor(){
      this.errors = {};
    }

    //Record new errors
     record(errors){
      this.errors = errors;
    }

    any(){
      return Object.keys(this.errors).length > 0;
    }

    //Fetch errors if they exist
    get(field){
      if (this.errors[field]){ 
        return this.errors[field][0];
      }
    }
   

    hasAny(field){
      return this.errors.hasOwnProperty(field);
    }

    clear(field){
      if(field){
        delete this.errors[field];
        return;
      }
      this.errors = {};
    }

  }