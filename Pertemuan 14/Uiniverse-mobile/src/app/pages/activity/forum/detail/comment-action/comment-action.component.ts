import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../../../services/gn.service';
import { PopoverController } from '@ionic/angular';

@Component({
  selector: 'app-comment-action',
  templateUrl: './comment-action.component.html',
  styleUrls: ['./comment-action.component.scss'],
})
export class CommentActionComponent implements OnInit {

  id = "";
  constructor(private gn:GnService, private popoverController:PopoverController) { }

  ngOnInit() {}

  delete(){
    this.gn.hhDelete("post_comments?id="+this.id,{
      title:"Menghapus Komentar",
      message:"Yakin menghapus Komentar ini?",
      load:"Menghapus Komentar",
      err:"Gagal menghapus Komentar"
    }, ()=>{
      this.popoverController.dismiss();
    });
  }

}
