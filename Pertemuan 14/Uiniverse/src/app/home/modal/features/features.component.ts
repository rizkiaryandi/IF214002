import { Component, ViewChild, ElementRef } from '@angular/core';
import { ModalController, LoadingController } from '@ionic/angular';
import { GnService } from '../../../services/gn.service';
import { InAppBrowser, InAppBrowserOptions, InAppBrowserObject } from '@ionic-native/in-app-browser/ngx';


@Component({
  selector: 'app-features',
  templateUrl: './features.component.html',
  styleUrls: ['./features.component.scss'],
})
export class FeaturesComponent {
  @ViewChild('slides', {static:false}) slides: ElementRef;
  initSlide=0;

  opt:InAppBrowserOptions={
    statusbar: {
        color: '#FF3880FF'
    },
    title: {
        color: '#3880ff',
        showPageTitle: true,
        staticText: ''
        
    },
    closeButton: {
        wwwImage: '/assets/icon/arrow-back.png',
        wwwImagePressed: '/assets/icon/arrow-back.png',
        align: 'left',
        event: 'closePressed',
    },
    menu: {
      image: 'menu.png',
      title: 'Uiniverse',
      cancel: 'Tutup',
      align: 'right',
      items: [
            {
                event: 'salinUrl',
                label: 'Salin Url'
            },
            {
                event: 'refresh',
                label: 'Refresh'
            }
        ]
    },
    
    backButtonCanClose: true
    

  }

  openUrl(url){
    window.open(url, '_blank');
  }

  constructor(private modalController:ModalController, 
    private inAppBrowser: InAppBrowser, 
    public loadingController: LoadingController,
    public gn:GnService) { }

  ngOnInit() {}

  async yBrowse(link='', name=''){
    try {
      this.opt.title.staticText = name;
      const loading = await this.loadingController.create({
        message: name,
        spinner:'dots',
        translucent: true,
        backdropDismiss: true
      });
      loading.present().then(()=>{
        this.dismiss();
      })
      
      var browser: InAppBrowserObject = await this.inAppBrowser.create(link, '_blank', this.opt);
      
      browser.on('loadstop').subscribe(() => {
        loading.dismiss();
        browser.show();
      })
    } catch (error) {
      alert(error)
    }
  }

  

  ionViewWillEnter(){
    
    this.slides.nativeElement.update();
    this.slides.nativeElement.slideTo(this.initSlide);
  }

  dismiss(){
    this.modalController.dismiss();
  }

  slidePrev(){
    this.slides.nativeElement.slidePrev();
  }

  slideNext(){
    this.slides.nativeElement.slideNext();
  }

  pagesNavigate(url){
    this.gn.pagesNavigate(url).then(()=>{
      this.dismiss();
    })
  }
}
