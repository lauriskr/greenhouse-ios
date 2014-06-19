//
//  SECDetailViewController.h
//  greenhouse-ios-second
//
//  Created by lauris on 19/06/14.
//  Copyright (c) 2014 greenhouse. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface SECDetailViewController : UIViewController <UISplitViewControllerDelegate>

@property (strong, nonatomic) id detailItem;

@property (weak, nonatomic) IBOutlet UILabel *detailDescriptionLabel;
@end
