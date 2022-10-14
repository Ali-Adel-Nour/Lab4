import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-reg',
  templateUrl: './reg.component.html',
  styleUrls: ['./reg.component.css']
})
export class RegComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }

  myRegFormValidation = new FormGroup({
    name: new FormControl("",[Validators.required, Validators.minLength(3)]),
    age: new FormControl("",[Validators.min(20), Validators.max(40), Validators.required]),
    mail:new FormControl("",[Validators.required, Validators.email])
  })
  get NameValid(){
    return this.myRegFormValidation.controls.name.valid;
  }

  get AgeValid(){
    return this.myRegFormValidation.controls.age.valid;
  }
  get MailValid(){
    return this.myRegFormValidation.controls.mail.valid;
  }

  SendData(){
    console.log(this.myRegFormValidation);
    //Add Data To DB
    if(this.myRegFormValidation.valid){
      //ADD--->DB
    }
  }

}
/*


import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';

export class ValidTestComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }

  myRegFormValidation = new FormGroup({
    name: new FormControl("Ahmed",Validators.required),
    age: new FormControl(0,[Validators.min(20), Validators.max(40)])
  })


  }

}


*/