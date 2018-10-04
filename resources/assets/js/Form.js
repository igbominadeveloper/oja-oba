import Errors from './Errors';

export default class Form {
  constructor(fields){
    this.fields = fields;

    for (let field in fields){
      this[field] = fields[field];
    }
    this.errors = new Errors();
  }

  reset(){
    this.fields = '';
  }

  submit(){
    axios.post('/login',this.fields)
      .then(response => {
        console.log(response.data);
        this.onSuccess();
      })
      .catch(error => {
        this.errors.record(error.response.data.errors);
      })
  }

  onSuccess(){
    alert("Form submitted");
    this.reset();
  }
}