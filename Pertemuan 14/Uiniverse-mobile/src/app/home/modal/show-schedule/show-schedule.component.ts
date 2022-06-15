import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../services/gn.service';
import { ModalController } from '@ionic/angular';

@Component({
  selector: 'app-show-schedule',
  templateUrl: './show-schedule.component.html',
  styleUrls: ['./show-schedule.component.scss'],
})
export class ShowScheduleComponent implements OnInit {
  sc:any={};
  spec;
  st:any={
    deadline_start:"",
    deadline_end:""
  };
  constructor(
    public gn:GnService,
    private modalController:ModalController) { }

  ngOnInit() {
    if(this.sc.type == 'college'){
      this.spec = "Mata Kuliah"
      let a = this.sc.deadline_start.split(' ')[1]
      let b = this.sc.deadline_end.split(' ')[1]
      this.st.deadline_start = this.gn.day(this.sc.specific)+", "+a
      this.st.deadline_end = b
    }
    else{
      this.spec = this.sc.specific;
      this.st.deadline_start = this.sc.deadline_start
      this.st.deadline_end = this.sc.deadline_end
    }
  }

  dismiss(){
    this.modalController.dismiss();
  }
}
