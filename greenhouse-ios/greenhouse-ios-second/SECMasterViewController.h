//
//  SECMasterViewController.h
//  greenhouse-ios-second
//
//  Created by lauris on 19/06/14.
//  Copyright (c) 2014 greenhouse. All rights reserved.
//

#import <UIKit/UIKit.h>

@class SECDetailViewController;

@interface SECMasterViewController : UITableViewController

@property (strong, nonatomic) SECDetailViewController *detailViewController;

@end
