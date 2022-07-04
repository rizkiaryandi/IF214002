import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../../services/gn.service';
import { ActivatedRoute } from '@angular/router'

@Component({
  selector: 'app-add',
  templateUrl: './add.page.html',
  styleUrls: ['./add.page.scss'],
})
export class AddPage implements OnInit {

  data:any={
    id:0,
    text:"",
    created_at:""
  }

  id = parseInt(this.activatedRoute.snapshot.paramMap.get('id'));

  met="add";

  constructor(private gn:GnService, private activatedRoute:ActivatedRoute) { }

  ngOnInit() {

    this.id = parseInt(this.activatedRoute.snapshot.paramMap.get('id'));
    if(this.id){
      this.gn.getS("notes").then(data=>{
        this.data = data.find(x => x.id === this.id);
        this.met = "edit";
      });
    }
  }

  addNotes(){
    if(this.met == "add"){
      this.data.id = new Date().getTime();
      this.data.created_at = new Date().toLocaleString();
      let ch = this.data.text.split(" ");
      if(ch.length > 1){
        let jdl = ch[0]+" "+ch[1];
        if(jdl.length > 16){
          if(ch[0].length < 3) this.data.name = "(Catatan) "+new Date().getTime();
          else this.data.name = ch[0];
        } else this.data.name = jdl;
      }
      else{
        if(ch[0].length < 3) this.data.name = "(Catatan) "+new Date().getTime();
        else if(ch[0].length > 16) this.data.name = ch[0].substr(0,20)+"..";
        else this.data.name = ch[0];
      }
      
      this.gn.addS("notes", this.data);
    }
    else if(this.met == "edit"){
      this.data.id = this.id;
      this.gn.editS("notes", this.id, this.data)
    }

    this.gn.pagesNavigate('note');
  }

}
