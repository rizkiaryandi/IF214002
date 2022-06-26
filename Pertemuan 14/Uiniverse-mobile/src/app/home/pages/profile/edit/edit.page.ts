import { Component, OnInit } from '@angular/core';
import { GnService } from '../../../../services/gn.service';

@Component({
  selector: 'app-edit',
  templateUrl: './edit.page.html',
  styleUrls: ['./edit.page.scss'],
})
export class EditPage implements OnInit {
  imgPrev = null;
  im;

  constructor(private gn: GnService) {}

  profile: any = {
    id: '',
    name: '',
    tel: '',
    ig: '',
    em: '',
    bio: '',
    address: '',
    information: '',
    img: null,
  };
  socmed: any = { tel: '', ig: '', em: '' };

  ngOnInit() {
    this.gn.hhGet('user_profile?id=ynd_profile', (data) => {
      if (data.stat == true) {
        this.profile = data.data[0];
        this.profile.img = this.gn.cData(this.profile.img, null);
      }
    });
  }

  simpan() {
    let d: any = {};
    // this.profile.img = "";

    d.data = this.profile;
    d.load = 'Mengupdate Info Pengguna';
    d.err = 'Gagal mengedit Info';
    this.gn.hhPost('user_profile/userdatas', d, () => {
      this.gn.defAddS('loga', true).then(() => {
        this.gn.pagesNavigate('home');
      });
    });
  }

  sImage(input) {
    let dt: any = {};
    const fd = new FormData();
    fd.append(
      'img',
      input.target.files[0],
      '1' + this.gn._id + '6' + new Date().getTime() + '.jpeg'
    );
    dt.data = fd;
    dt.load = 'Mengupdate foto profile';
    dt.err = 'Gagal';

    this.gn.hhPost('user_profile/img', dt, (data) => {
      if (data) {
        this.ngOnInit();
      }
    });
  }

  hapus() {
    let dt: any = {};
    dt.title = 'Foto Profil';
    dt.message = 'Yakin menghapus foto?';
    dt.load = 'Menghapus foto profil';
    dt.err = 'Gagal menghapus foto';
    this.gn.hhDelete('user_profile?id=' + this.gn._id, dt, (data) => {
      if (data) {
        this.ngOnInit();
        this.gn.defAddS('loga', true);
      }
    });
  }
}
