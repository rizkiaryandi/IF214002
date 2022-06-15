import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../services/gn.service';
import { PopoverController } from '@ionic/angular';

@Component({
  selector: 'app-post-action',
  templateUrl: './post-action.component.html',
  styleUrls: ['./post-action.component.scss'],
})
export class PostActionComponent implements OnInit {

  id = "";
  constructor(private gn:GnService, private popoverController:PopoverController) { }

  ngOnInit() {}

  edit(){
    if(this.id != ""){
      this.gn.pagesNavigate('forum/edit/'+this.id);
      this.popoverController.dismiss();
    };
  }
  
  delete(){
    this.gn.hhDelete("posts?id="+this.id,{
      title:"Menghapus Postingan",
      message:"Yakin menghapus postingan ini?",
      load:"Menghapus postingan",
      err:"Gagal menghapus postingan"
    }, ()=>{
      this.popoverController.dismiss();
    });
  }
}
